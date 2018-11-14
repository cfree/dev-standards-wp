# HTML Standards

Adhere to the [Front End Guidelines for HTML](https://github.com/bendc/frontend-guidelines#html)

## Summary

- HTML5 provides us with lots of semantic elements aimed to describe precisely the content. Make sure you benefit from its rich vocabulary.
- Make sure you understand the semantics of the elements you're using. It's worse to use a semantic element in a wrong way than staying neutral.
- Keep your code terse. Use double quotation marks for attributes.
- Unless there's a valid reason for loading your scripts before your content, don't block the rendering of your page. If your style sheet is heavy, isolate the styles that are absolutely required initially and defer the loading of the secondary declarations in a separate style sheet. Two HTTP requests is significantly slower than one, but the perception of speed is the most important factor.

## Accessibility

Accessibility shouldn't be an afterthought. You can immediately fix the little things that make a huge difference, such as:

- learning to use the alt attribute properly
- making sure your links and buttons are marked as such (no <div class="button"> atrocities)
- not relying exclusively on colors to communicate information
- explicitly labeling form controls

## Standard page / filesize
- page size should be no larger then 2MB
- images should be no larger then 600KB
- make sure to run images through an image optimizer 
