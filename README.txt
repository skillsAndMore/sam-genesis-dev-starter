# SkillsAndMore Genesis Dev Starter Theme

GitHub project link: https://github.com/SkillsAndMore/sam-dev-starter/.


## Installation Instructions

1. Upload the SkillsAndMore Genesis Dev Starter Theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the SkillsAndMore Genesis Dev Starter Theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Theme Support

Please visit https://my.SkillsAndMore.com/help/ for theme support.

## For Developers

The version of [SkillsAndMore Genesis Dev Starter on GitHub](https://github.com/SkillsAndMore/sam-dev-starter/) includes tooling to check code against WordPress standards. To use it:

1. Install Composer globally on your development machine. [See Composer setup steps](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).
2. In the command line, change directory to the SkillsAndMore Genesis Dev Starter folder.
3. Type the command `composer install` to install PHP development dependencies.
4. Type `composer phpcs` to run coding standards checks.

You'll see output highlighting issues with PHP files that do not conform to SkillsAndMore Genesis Dev Starter coding standards.

### npm scripts

Scripts are also provided to help with CSS linting, CSS autoprefixing, and creation of pot language files. To use them:

1. Install [Node.js](https://nodejs.org/), which also gives you the Node Package Manager (npm).
2. In the command line, change directory to the SkillsAndMore Genesis Dev Starter folder.
3. Type the command `npm install` to install dependencies.

You can then type any of these commands:

- `npm run autoprefixer` to add and remove vendor prefixes in `style.css`.
- `npm run makepot` to regenerate the `languages/sam-dev-starter.pot` file.
- `npm run lint:css` to generate a report of style violations for `style.css`.
- `npm run zip` to create a sam-dev-starter.zip of the current branch. Excludes files marked export-ignore in `.gitattributes`.

### Packaging for distribution

1. Follow the install instructions for npm scripts above.
2. Switch to the git branch you plan to distribute.
3. Bump version numbers manually and commit those changes.
4. Type `npm run zip` to create `sam-dev-starter.zip`. Files marked export-ignore in `.gitattributes` are excluded from the zip.

The `zip` command is an alias for `git archive -o sam-dev-starter.zip HEAD`.
