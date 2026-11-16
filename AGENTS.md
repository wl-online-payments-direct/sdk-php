# AGENTS.md

## Using this SDK in your project

If you are writing code that integrates Worldline Direct with this SDK, read the agent skill
for this SDK version first and use the code it shows. Do not write SDK calls from memory.

- In this package: `skills/worldline-direct/SKILL.md`
  (package folder: `vendor/wl-online-payments-direct/sdk-php/`, or `composer show -P wl-online-payments-direct/sdk-php`)
- Online: https://raw.githubusercontent.com/wl-online-payments-direct/sdk-php/13.1.0/skills/worldline-direct/SKILL.md

The skill matches SDK version 13.1.0. If your installed version is different, use the skill
from your installed package.

## Working on this SDK

- SDK source: `src/` and `lib/`; unit and integration tests: `tests/`.
- Run `composer install` from the repository root.
- Copy `tests/config.json.dist` to `tests/config.json` and replace the template values with actual values.
- Run the tests with `vendor/phpunit/phpunit/phpunit`.
- See `README.md` for details.
