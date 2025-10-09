# Task Management API

## Context

You work for a software development company which develops software for bank corp.

## Requirements

Bank Corp has reported difficulties managing tasks for their teams. They want to invest into a solution which will allow them to manage tasks.

The application will be developed in Symfony, using Doctrine ORM.

You’ve joined the team as a feature dev to assist designing and building the service.

They need their staff to be able to create new tasks, update them and complete. They need some way to organise the tasks.

There is another team developing the frontend, so this just needs to be an API. 

## Structure of Activity

This activity is collaborative, which means you will work with interviewer on the problem and be able to get support as you go.

We aren't just looking for raw technical ability, we also want to see how you work with other team members and requirements. The project doesn't even necessarily need to work, it won't be used, and it's purely to assess your skills.

Now discuss with interviewer about requirements of the task and decide a plan to implement.

## Helpful CLI Commands

Starting project: `docker compose up -d && composer require symfony/runtime && docker compose exec php bin/console d:m:m --no-interaction`

Changing DB: `docker compose exec php bin/console d:m:diff && docker compose exec php bin/console d:m:m`

Running PHPUnit tests: `docker compose exec php vendor/bin/phpunit`
