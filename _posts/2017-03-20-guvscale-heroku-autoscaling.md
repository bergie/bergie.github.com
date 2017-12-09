---
title: GuvScale - Autoscaling for Heroku worker dynos
location: Berlin, Germany
categories:
  - business
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/guvscale-graph.jpg'
---
I'm happy to announce that [GuvScale](https://guvscale.com) &mdash; our service for autoscaling Heroku background worker dynos &mdash; is now available [in a public beta](https://elements.heroku.com/addons/guvscale).

If you're using [RabbitMQ](https://www.rabbitmq.com/) for distributing work to background dynos hosted by Heroku, GuvScale can monitor the queues for you and scale the number of workers up and down automatically.

This gives two big benefits:

* **Consistent processing times** by scaling dynos up to meet peak load
* **Cost savings** by reducing idle dynos. Don't pay for computing capacity you don't need

[![GuvScale on Heroku Elements](https://d2vqpl3tx84ay5.cloudfront.net/guvscale-heroku-elements.png)](https://elements.heroku.com/addons/guvscale)

We originally [built the guv tool](http://www.jonnor.com/2015/11/guv-automatic-scaling/) back in 2015, and it has been used since by [The Grid](https://thegrid.io/) to manage their [computationally intensive](http://libregraphicsworld.org/blog/entry/artificial-intelligence-designs-websites-uses-open-technology-stack) AI tasks. At The Grid we've had GuvScale make hundreds of thousands of scaling operations per month, running background dynos at more than 90% efficiency.

_This has meant being able to produce sites at a consistent, predictable throughput regardless of how many users publish things at the same time, as well as not having to pay for idle cloud machines._

## Getting started

There are many frameworks for splitting computational loads out of your main web process and into background dynos. If you're working with Ruby, you've probably heard of [Sidekiq](http://sidekiq.org/). For Python there is [Celery](http://www.celeryproject.org/). And there is our [MsgFlo](https://msgflo.org/) flow-based programming framework for a more polyglot approach.

If you're already using one of these with RabbitMQ on Heroku (for example via the [CloudAMQP service](https://www.cloudamqp.com)), you're ready to start autoscaling with GuvScale!

First enable the [GuvScale add-on](https://elements.heroku.com/addons/guvscale):

```bash
$ heroku addons:create guvscale
```

Next you'll need to create an OAuth token so that GuvScale can perform scaling operations for your app. Do this with the [Heroku CLI tool](https://devcenter.heroku.com/articles/heroku-cli). First install the authorization add-on:

```bash
$ heroku plugins:install heroku-cli-oauth
```

Then create a token:

```bash
$ heroku authorizations:create --description "GuvScale"
```

Copy the authentication token, and paste it to the GuvScale dashboard that you can access from your app's _Resources_ tab in [Heroku Dashboard](https://dashboard.heroku.com/).

Once GuvScale has an OAuth token, it is ready to do scaling for you. You'll have to provide some [scaling rules](https://devcenter.heroku.com/articles/guvscale#adding-a-guvscale-configuration), either in the GuvScale dashboard, or via the [heroku-guvscale CLI tool](https://github.com/flowhub/heroku-guvscale).

Here is an example for scaling a process that sends emails on the background:

```yaml
emailsender:          # Dyno role to scale
  queue: "send-email" # The AMQP queue name
  deadline: 180       # 3 minutes, in seconds
  minimum: 0          # Minimum number of workers
  maximum: 5          # Maximum number of workers
  concurrency: 10     # How many messages are processed concurrently
  processing: 0.300   # 300 ms, in seconds
```

Once GuvScale has been configured you can monitor its behavior in the dashboard.

![Workload and scaling operations](https://d2vqpl3tx84ay5.cloudfront.net/guvscale-graph.jpg)

Read more in the [Heroku Dev Center GuvScale tutorial](https://devcenter.heroku.com/articles/guvscale).

GuvScale is free during the public beta. [Get started now](https://elements.heroku.com/addons/guvscale)!

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Rescaling 3k images. From 0 servers to 25, back to 0 in &lt;4 mins. 0 humans involved.<a href="https://twitter.com/hashtag/devops?src=hash">#devops</a> <a href="https://t.co/OSPMZtfrd9">https://t.co/OSPMZtfrd9</a> <a href="https://t.co/s7Bog4hHLZ">pic.twitter.com/s7Bog4hHLZ</a></p>&mdash; Jon Nordby (@jononor) <a href="https://twitter.com/jononor/status/740652896254054401">June 8, 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
