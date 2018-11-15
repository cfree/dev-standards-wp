## General Workflow

Limit git usage to the command line, opting to use GUI as a last resort. This gives you a better understanding what git is actually doing.

_Don't comment out code, delete it. That's what version control is for._

We want the feature branches to be relatively smaller in size, so they are easier for others to review quickly. If several different, large changes need to be made, considering making a separate branch/pull request for each change.

1. Using the * [GitHub Flow](https://guides.github.com/introduction/flow/) workflow, every new feature/fix to a site will be done locally in a branch off of master
2. Commits of related changes should made incrementally. Ex: Formatting should be a separate commit from functionality changes
3. When the new/updated features are completed and have been tested locally, a pull request (PR) should be made to merge the branch into master
	- Be sure that the latest changes on the master branch have been pulled down and your feature branch has been rebased
4. Submit the PR to the development team by pasting a link in the `#pull-requests` Slack channel.
	- All developers should be monitoring the channel and should offer to review the PR as their availability permits
5. Discussion on the changes contained in the PR should be done in GitHub/BitBucket (wherever the PR is), so that there is documentation of said discussion
6. Developers reviewing the PR should look for:
	- Code adhering to company development standards
	- Opportunities for code improvement (optimizations, alternative approaches, etc.)
7. When discussion concludes (if applicable) and the code is ready to be merged into master, the reviewer should indicate their approval in the PR and the person who created the PR should merge in the files and close it.
8. Delete the completed branch from GitHub so we know which branches are in active development.


## Documentation

Project-specific documentation (how to compile Sass, how to install the dependencies, etc.) should be documented in the private project's Wiki.

You can use the wiki template found within the root of this repository.


## Editor Config

Be sure to install the .editorconfig file found in this repo to maintain consistency


## QA and Testing

In addition to frequent pull requests and code review every project needs to be QA'd by a developer _that were not the original developers_ before delivery. The development QA process must includes the following: browser testing, device testing, functional testing, responsive testing (if applicable), and accuracy to original design. If not specified then browser testing need to include the latest of the following browsers, Firefox, Chrome, Safari, and IE. Device testing need to include >= iPhone 3 and Android. This is an elaboration of the step in the prelaunch checklist found [here](https://github.com/cfree/flaming-ironman/blob/master/frameworks/wordpress/pre-launch-checklist.md#pre-launch-checklist).


## Web Servers

- [mediaopz](http://mediaopz.com/) - Our self-hosted Interspire email hosting platform, since replaced with Mailchimp. Also contains Shopify code and any code needed to review publicly.
- [ad](https://ac.mediatemple.net/login.mt?redirect=home.mt) - Media Temple GS account that hosts a number of sites
- [apps](https://ac.mediatemple.net/login.mt?redirect=home.mt) - Media Template GS account that hosts a number of sites
- [wpengine](http://my.wpengine.com) - Account that hosts a number of WordPress sites
- Rackspace - Host for Chipotle site(s)
- Acquia Cloud - Host for Drupal sites (Bold Earth, etc.)
- Digital Ocean - For internal use

