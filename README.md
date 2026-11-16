# Online Payments PHP SDK

## Introduction

The Online Payments PHP SDK helps you to communicate with the Online Payments Server API. Its primary features are:

* convenient PHP wrapper around the API calls and responses:
  * marshalls PHP request objects to HTTP requests
  * unmarshalls HTTP responses to PHP response objects or PHP exceptions
* handling of all the details concerning authentication
* handling of required metadata

See the [Online Payments Developer Hub](https://docs.direct.worldline-solutions.com/documentation/sdk/server/php/) for more information on how to use the SDK.

## Structure of this repository

This repository consists out of the following components:

1. The source code of the SDK itself: `/src` and `/lib`
2. The source code of the unit and integration tests: `/tests`

## Requirements

PHP 8.3 or above is required. In addition, to support streaming uploads, package [robtimus/multipart](https://packagist.org/packages/robtimus/multipart) is required.

## Installation via Composer

1. Initialize [Composer](https://getcomposer.org/download/) in your project, if this is not already done, by executing the following command:

    ```
    composer init
    ```

2. Add a requirement to the SDK to your `composer.json` file by executing the following command:

    ```
    composer require wl-online-payments-direct/sdk-php
    ```
3. Add `vendor/autoload.php` to your project, if this is not already done, by adding the following line of code:

    ```
    require __DIR__ . '/vendor/autoload.php';
    ```

## Working with AI agents

The SDK comes with an agent skill for AI coding agents such as Claude Code, Codex, GitHub Copilot and Cursor. It tells the agent how to choose an integration method, which steps each flow needs, which rules every integration must follow, and gives code examples that are checked against this SDK version.

The skill for this version is available:

* online, as plain Markdown for agents: https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/13.1.0/skills/worldline-direct/SKILL.md
* online, on GitHub: https://github.com/wl-online-payments-direct/sdk-php/blob/13.1.0/skills/worldline-direct/SKILL.md
* in the Composer package: `vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/`
* in this repository: `skills/worldline-direct/`

To make your agent use it, add this to the `AGENTS.md` or `CLAUDE.md` file of your project:

```
For the Worldline Direct integration (wl-online-payments-direct/sdk-php), read and follow the agent skill
vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/SKILL.md
(online: https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/13.1.0/skills/worldline-direct/SKILL.md)
Use the code shown in the skill; do not write SDK calls from memory.
```

Agents that support the Agent Skills format can also load the folder directly, for example by copying `vendor/wl-online-payments-direct/sdk-php/skills/worldline-direct/` to `.claude/skills/worldline-direct/` in your project for Claude Code.

## Manual installation

1. Download the latest version of the PHP SDK from GitHub. Choose the `sdk-php-x.y.z.tar.gz` file from the [releases](https://github.com/wl-online-payments-direct/sdk-php/releases) page, where `x.y.z` is the version number.
2. Add the contents of the `tar.gz` file to your project. The content of the `/src` and `/lib` folders may be combined, if this is required by the project.
3. Add all classes from the `/src` and `/lib` folders to your autoloader; all classes inside these folders are compliant with [PSR-4](http://www.php-fig.org/psr/psr-4/).

## Development and testing

1. Install [Composer](https://getcomposer.org/download/)
2. From the root of the sdk-php project, run `composer install`
3. Copy `tests/config.json.dist` to `tests/config.json` and replace the template values by actual values
4. From the root of the sdk-php project, `vendor/phpunit/phpunit/phpunit` (or just `phpunit` when it is already installed on your local machine)
