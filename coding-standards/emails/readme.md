# HTML Emails

1. Static HTML
	- Use [Ink email framework](http://zurb.com/ink/) to quickly create responsive email templates
		- Framework __not__ required for static-width emails
		- [Guidelines for working with Ink](https://scotch.io/tutorials/building-responsive-email-templates-with-ink)
		- [CSS for Ink at 650px wide](https://gist.github.com/rx/10542978)
		- [Zurb's Inline CSS tool](http://zurb.com/ink/inliner.php) - for Gmail/Outlook clients that strip out CSS classes
2. Test
	- Test in modern browsers (Chrome, FF, Safari, IE9+, etc.)
	- Review the email in [Litmus](https://litmus.com/), make updates as necessary
3. Stage
	- Place the completed email on Mailchimp as a template
		- Provide client with Preview link if necessary
		- Send test email
4. Save
	- Add static email in the [Email Git repo](https://bitbucket.org/cfree/email)


### Mailchimp

To create an archive link in the email, [follow these instructions](http://kb.mailchimp.com/campaigns/design/add-a-view-in-browser-link)


### Mediaopz

Previously, the Mediaopz server was where emails were staged for client review.

