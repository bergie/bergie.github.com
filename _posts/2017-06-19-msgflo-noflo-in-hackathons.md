---
title: "Two hackathons in a week: thoughts on NoFlo and MsgFlo"
location: Berlin, Germany
categories:
  - fbp
  - desktop
  - geo
layout: post
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_winners.jpg'
---
Last week I participated in two hackathons, events where a group of strangers would form a team for two or three days and build a product prototype. In the end all teams pitch their prototypes, and the best ones would be given some prizes.

Hackathons are typically organized to get feedback from developers on some new API or platform. Sometimes they're also organized as a recruitment opportunity.

Apart from the free beer and camaraderie, I like going to hackathons since they're a great way to battle test the [developer tools](https://flowhub.io/) I build. The time from idea to having to have a running prototype is short, people are used to different ways of working and different toolkits.

If our tools and [flow-based programming](https://en.wikipedia.org/wiki/Flow-based_programming) work as intended, they should be ideal for these kind of situations.

## Minds + Machines hackathon and Electrocute

[Minds + Machines hackathon](https://mindsmachinesberlin.devpost.com/) was held on a boat and focused on decarbonizing power and manufacturing industries. The main platform to work with was [Predix](https://www.ge.com/digital/predix), GE's PaaS service.

[![Team Electrocute](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_team_small.jpg)](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_team.jpg)

Our project was **[Electrocute](https://devpost.com/software/electrocute-a9guqr)**, a machine learning system for forecasting power consumption in a changing climate.

> 1.5°C is the global warming target set by the Paris Agreement. How will this affect energy consumption? What kind of generator assets should utilities deploy to meet these targets? When and how much renevable energy can be utilized?

> The changing climate poses many questions to utilities. With Electrocute's forecasting suite power companies can have accurate answers, on-demand.

[![Electrocute forecasts](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_map_small.png)](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_map.png)

The system was built with a [NoFlo](https://noflojs.org/) web API server talking over [MsgFlo](https://msgflo.org/) with a Python machine learning backend. We also built a frontend where users could see the energy usage forecasts on a heatmap.

[![NoFlo-Xpress in action](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_noflo_small.png)](https://d2vqpl3tx84ay5.cloudfront.net/minds_machines_noflo.png)

Unfortunately we didn't win this one.

## Recoding Aviation and Skillport

[Recoding Aviation](http://www.recodingaviation.com/) was held at [hub:raum](https://www.hubraum.com/) and focused on improving the air travel experience through usage of open APIs offered by the various participating airports.

[![Team Skillport](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_team_small.jpg)](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_team.jpg)

**[Skillport](https://platform.recodingaviation.com/#/projects/594437673d055b0004c17f5a)** was our project to make long layovers more bearable by connecting people who're stuck at the airport at the same time.

> Long layovers suck. But there is ONE thing amazing about them: You are surrounded by highly skilled people with interesting stories from all over the world. It sometimes happens that you meet someone randomly - we all have a story like that. But usually we are too shy and lazy to communicate and see how we could create a valuable interaction. You never know if the other person feels the same.

> We built a mobile app that turns airports into a networking, cultural exchange and knowledge sharing hub. Users tell each other through the app that they are available to meet and what value they can bring to an interaction.

The app connected with a J2EE API service that then communicated over MsgFlo with NoFlo microservices doing all the interactions with social and airport APIs. We also did some data enrichment in NoFlo to make smart recommendations on meeting venues.

[![MsgFlo in action](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_msgflo_small.png)](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_msgflo.png)

This time our project went well with the judges and we were selected as the winner of the _Life in between airports_ challenge. I'm looking forward to the helicopter ride over Berlin!

[![Category winners](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_winners_small.jpg)](https://d2vqpl3tx84ay5.cloudfront.net/recoding_aviation_winners.jpg)

Skillport also won a space at [hub:raum](https://www.hubraum.com/), so this might not be the last you'll hear of the project...

## Lessons learned

### Benefits of a message queue architecture

I've written before on [why to use message queues for microservices](/blog/forget-http-microservices/), but that post focused more on the benefits for real-life production usage.

The problems and tasks for a system architecture in a hackathon are different. Since the time is short, you want to enable people to work in parallel as much as possible without stepping on each other's toes. Since people in the team come from different backgrounds, you want to enable a heterogeneous, polyglot architecture where each developer can use the tools they're most productive with.

MsgFlo is by its nature very suitable for this. Components can be written in any language that supports the message queue used, and we have convenience libraries for many of them. The [discovery mechanism](https://msgflo.org/docs/communications/index.html) makes new microservices appear on the Flowhub graph as soon as they start, enabling services to be wired together quickly.

### Mock early, mock often

Mocks are a useful way to provide a microservice to the other team members even before the real implementation is ready.

For example in the GE Predix hackathon, we knew the machine learning team would need quite a bit of time to build their model. Until that point we ran their microservice with a simple [msgflo-python](http://github.com/msgflo/msgflo-python) component that just gave `random()` as the forecast.

This way everybody else was able to work with the real interface from the get-go. When the learning model was ready we just replaced that Python service, and everything was live.

Mocks can be useful also in situations where you have a misbehaving third-party API.

### Don't forget tests

While shooting for a full test coverage is probably not realistic within the time constraints of a hackathon, it still makes sense to have at least some "happy path" tests. When you're working with multiple developers each building a different parts of the service, interface tests serve a dual purpose:

* They show the other team members how to use your service
* They verify that your service actually does what it is supposed to

And if you're using a continuous integration tool like [Travis](https://travis-ci.org/), the tests will help you catch any breakages quickly, and also ensure the services work on a clean installation.

For a message queue architecture, [fbp-spec](https://github.com/flowbased/fbp-spec) is a great tool for writing and running these interface tests.

### Talk with the API providers

The reason API and platform providers organize these events is to get feedback. As a developer that works with tons of different APIs, this is a great opportunity to make sure your ideas for improvement are heard.

On the flip side, this usually also means the APIs are in a pretty early stage, and you may be the first one using them in a real-world project. When the inevitable bugs arise, it is a good to have a channel of communications open with the API provider on site so you can get them resolved or worked around quickly.

### Room for improvement

The downside of the NoFlo and MsgFlo stack is that there is still quite a bit of a learning curve. [NoFlo documentation](http://noflojs.org/documentation/) is now in a reasonable place, but with [Flowhub](https://flowhub.io/) and MsgFlo we have tons of work ahead on improving the onboarding experience.

Right now it is easy to work with if somebody sets it up properly first, but getting there is a bit tricky. Fixing this will be crucial for enabling others to benefit from these tools as well.
