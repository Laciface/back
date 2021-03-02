# Back to the Future

## Story

Old habits die hard. Doctor Emmett Brown was experimenting with his beloved DeLorean again and he accidently sent his software back in time.
During the time travel, it became very obsolete. You gotta help him bring his code `Back to the Future`...

## What are you going to learn?

- what is `legacy code` and how to work with it effectively
- how to `migrate` software products
- what's the difference between the `Edit & Pray` and `Cover & Modify` approaches

## Tasks

1. Include a dependency manager into the software that can help you manage and separate packages.
    - There is a `vendor` folder, and a `composer.json` file with at least the basic properties of a project (`name` and `type`)

2. Replace the `Database Abstraction Layer` (DBAL) with a more advanced one.
    - The `mysql functions` are replaced with `PDO`

3. Install a modern `template engine` that can easily replace the current one and has more advanced capabilities.
    - The `BladeOne` template engine is installed: a folder named `bladeone` exists in the `/vendor/eftec/` directory

4. Replace all `templates` with files that can work with the previously installed template engine.
    - All templates replaced with the corresponding `*.blade.php` files and are rendered using `BladeOne`
    - The outlooks of the pages are not changed
    - The behaviors of the pages are not changed

5. [OPTIONAL] Use a `routing system` that replaces the currently used paths of traffic.
    - The `*.php` files are replaced with routes like `/`, `/videos`, `/schematics`, and `/info`
    - The behaviors of the pages are not changed
    - The `MENU` table is updated/altered to use `routes` instead of files
    - The test suite is updated as well

## General requirements

None

## Hints

- The biggest help in migrating an application is a `well-defined test suite`.
- It is best if you first check if the software is `testable` or not. If the latter, refactor it until it can be tested.

## Background materials

- <i class="far fa-exclamation"></i> [What Is Legacy Code](https://www.perforce.com/blog/qac/8-tips-working-legacy-code)
- <i class="far fa-video"></i> [Berkeley: Legacy Code](https://youtu.be/CMmTTN5_Bbk)
- <i class="far fa-book-open"></i> [What is Software Migration](https://www.igi-global.com/dictionary/migrating-software-towards-mobile-technologies/38761)
