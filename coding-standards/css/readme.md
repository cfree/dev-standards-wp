# CSS / Sass Standards

Adhere (mostly) to the [CSS Guidelines](http://cssguidelin.es/)

## General

At a high level, we want:
- 80 character wide columns;
- multi-line CSS;
- minimal specificity;
- always avoid use of !important;
- meaningful use of whitespace;
- high level of reusability

Leverage the [LiveReload browser extension](http://livereload.com/extensions/) where possible.

Create a style guide / kitchen sink when possible. It can be hard to maintain, but it will pay off over time.

Split discrete chunks of code into their own files, which are concatenated during a build step.

Use hyphen case, not camel or underscore (snake)

For string use single quotes vs double quotes

Correct: 
`font-family: 'DINWebPro-CondMedium', Helvetica, sans-serif;`

Incorrect:
`font-family: "DINWebPro-CondMedium", Helvetica, sans-serif;`

Sections of code should be organized and ordered in a manner that corresponds to the html

```
/******* HTML *******/
<section class="main-header">
	/* ... */
</section>

<section class="main-content">
	/* ... */
</section>

<section class="main-footer">
	/* ... */
</section>

/******* CSS ********/

/*****************
CSS Header section
******************/
.main-header {
	/* ... */	
}





/**********
CSS Content 
**********/
.main-content {
	/* ... */
}





/************
CSS Footer
************/
.main-footer {
	/* ... */
}

```

If there are multiple selectors, place one selector per line. Exceptions to this rule should be fairly apparent, such as similar rule sets that carry only one declaration each.

```css
.first-item,
.second-item,
.third-item {
	/* ... */
}

.fourth-item { display: none; }
```

Avoid [collapsing margins](http://www.sitepoint.com/web-foundations/collapsing-margins/) by applying vertical margins to the bottom of elements, where possible.

For media queries, use `min-width`s when possible (mobile first):

```scss
.selector {
	/* Default mobile style */
	display: none;

	@include breakpoint(min-width 480px) {
		display: inline;
	}

	@include breakpoint(min-width 720px) {
		display: inline-block;
	}	

	@include breakpoint(min-width 990px) {
		display: block;
	}

	...
}

```

Refrain from using capitalized text in your markup. Uppercase text should be set in the CSS via `text-transform: uppercase;`

Use `padding` instead of `line-height` where possible when applying vertical padding to elements.

When indenting Sass, we stick to the same four (4) spaces, and we also leave a blank line before and after the nested ruleset.

`!important` should be the nuclear option. Avoid if possible.

Single space after the selector and curly bracket

```
/* Correct */
.class-name {
	...
}

/* Incorrect */
.class-name{ 

}

.class-name
{

}
```

Single space after the `:` and before the rule value

```
.class-name {
	/* Correct */
	display: none;

	/* Incorrect */
	display:none;
	display : none;
	display :none;
}
```

Use shorthand properties and avoid using multiple properties when it's not needed:

```css
.class-name {
 	/* correct */
	margin: 0 0 30px 20px;

	/* incorrect */
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 30px;
	margin-left: 20px;
}
```

Use unitless values when you can. Ex: `line-height: 1;`

Favor rem if you use relative units, but be sure to provide a fallback if using IE8:
```css
...
font-size: 18px;
font-size: 1.8rem;

```

Prefer seconds over milliseconds. Ex: `transition: opacity 0.3s;`

## Comments and Whitespace 

- single line comments use `/* ... */`
- 1 line of whitespace before comments that are not section headings
- 1 space after the rule name and before the value:
```
.selector {
	$rule: $value
}
```
- comments heading format:
```
/**********
CSS Heading
**********/
```
- 1 line of whitespace between single and nested selectors
```
.section-a {
	.nested-selector {

	}
}

.single-selector {
	
}
```
- 5 lines of whitespace between major sections of code
```





/**************************************
CSS Heading - Major section of code 
**************************************/
.section-b {
	.nested-selector {

	}
}

.other-selector {

}

.yet-another-selector {

}
```

Single spaces between anything that is a list of rules

Correct:
`font-family: "DINWebPro-CondMedium", Helvetica, sans-serif;`

Incorrect: 
`font-family:"DINWebPro-CondMedium",Helvetica,sans-serif;`

## Specificity

Always try and keep specificity as low as possible at all times. 

Don't make values and selectors hard to override with unnecessary specificity (watch your nesting levels).

Rules: 
- use only classes for css selectors, never ID's
- avoid un-necessary "nesting"
	- nesting meaning child and descendant selectors or actual nesting in sass
	- only nest when you need the specificity
	- as a rule of thumb, use as little nesting as possible
- avoid qualifying classes like `img.thumbnail` (use just `.thumbnail`)

## Naming conventions

A good naming convention will tell you and your team

- what type of thing a class does;
- where a class can be used;
- what (else) a class might be related to.

Pick a class name / ID that is sensible, but somewhat ambiguous: aim for high re-usability. Using a class name to describe content is redundant because content describes itself. 

Examples: 
- `.primary-nav` vs. `.site-nav` 
- `.sub-links` vs. `.footer-links`
- `.primary-button` vs. `.orange-button`

## Sass

Preferred ordering of properties inside selectors:
- `@include`s
- `@extend`s
- CSS properties

```scss
.class-name {
	@include border-radius(5px);
	@extend .clearfix;
	margin: 0;
}
```
website	
Comment liberally, explaining decisions for things that may seem odd to fresh eyes. 
Always use the double-slash format: `// Comment`

Selector Intent is the process of deciding and defining what you want to style and how you will go about selecting it. This helps with:
- Reusability
- Location Independence
- Portability
- Select what you want explicitly, rather than relying on circumstance or coincidence. Good Selector Intent will rein in the reach and leak of your styles.
- Write selectors for reusability, so that you can work more efficiently and reduce waste and repetition.
- Do not nest selectors unnecessarily, because this will increase specificity and affect where else you can use your styles.
- Do not qualify selectors unnecessarily, as this will impact the number of different elements you can apply styles to.
- Keep selectors as short as possible

## To Discuss

- BEM-like Naming
