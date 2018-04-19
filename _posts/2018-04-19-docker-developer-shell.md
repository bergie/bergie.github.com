---
title: Managing a developer shell with Docker
layout: post
location: Berlin, Germany
categories:
  - desktop
  - mobility
cover: 'https://d2vqpl3tx84ay5.cloudfront.net/vim-developer-shell-docker.png'
---
When I'm not in [Flowhub-land](https://flowhub.io/ide/), I'm used to developing software in a quite customized command line based development environment. Like for many, the cornerstones of this for me are [vim](https://www.vim.org) and [tmux](https://github.com/tmux/tmux/wiki).

As customization increases, it becomes important to have a way to manage that and distribute it across the different computers. For years, I've used a [dotfiles repository](https://github.com/bergie/dotfiles) on GitHub together with [GNU Stow](https://www.gnu.org/software/stow/) for this.

However, this still means I have to install all the software and tools before I can have my environment up and running.

## Using Docker

[Docker](https://www.docker.com) is a tool for building and running software in a containerized fashion. Recently [Tiago](https://github.com/tiagodeoliveira) gave me the inspiration to use Docker not only for distributing production software, but also for actually running my development environment.

Taking ideas from [his setup](https://github.com/tiagodeoliveira/docker-shell), I built upon my existing dotfiles and built a [reusable developer shell container](https://hub.docker.com/r/bergie/shell/).

With this, I only need Docker installed on a machine, and then I'm two commands away from having my normal development environment:

```shell
$ docker volume create workstation
$ docker run -v ~/Projects:/projects -v workstation:/root -v ~/.ssh:/keys --name workstation --rm -it bergie/shell
```

Here's how it looks in action:

![Working on NoFlo inside Docker shell](https://d2vqpl3tx84ay5.cloudfront.net/800x/vim-developer-shell-docker.png)

Once I update my Docker setup (for example to install or upgrade some tool), I can get the latest version on a machine with:

```shell
$ docker pull bergie/shell
```

At least in theory this should give me a fully identical working environment regardless of the host machine. Linux VPS, a MacBook, or a Windows machine should all be able to run this. And soon, this should also work out of the box [on Chromebooks](https://chromeunboxed.com/news/chromebook-containers-virtual-machine-crostini-google-io).

## Setting this up

The basics are pretty simple. I already had a repository for my dotfiles, so I only needed to write [a Dockerfile](https://github.com/bergie/dotfiles/blob/master/Dockerfile) to install and set up all my software.

To make things even easier, I [configured Travis](https://github.com/bergie/dotfiles/blob/master/.travis.yml) so that every time I push some change to the dotfiles repository, it will create and publish a new container image.

## Further development ideas

So far this setup seems to work pretty well. However, here are some ideas for further improvements:

* __ARM build__: Sometimes I need to work on Raspberry Pis. It might be nice to cross-compile an ARM version of the same setup
* __Key management__: Currently I create new SSH keys for each host machine, and then upload them to the relevant places. With this setup I could use a USB stick, or maybe even a [Yubikey](https://www.yubico.com/products/yubikey-hardware/) to manage them
* __Application authentication__: Since the Docker image is public, it doesn't come with any secrets built in. This means I still need to authenticate with tools like NPM and Travis. It might be interesting to manage these together with my SSH keys
* __SSH host__: with some tweaking it might be possible to run the same container on cloud services. Then I'd need a way to get my SSH public keys there and start an SSH server

If you have ideas on how to best implement the above, please [get in touch](mailto:henri.bergius@iki.fi).
