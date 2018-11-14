# JavaScript Standards

## Style Guide
Refer to the [jQuery](http://contribute.jquery.org/style-guide/js/) style guide.


### General Guidelines

- Use pure JavaScript when appropriate. Refer to [youmightnotneedjquery.com](http://youmightnotneedjquery.com/)
- Use `js-` CSS class prefix when using JavaScript hooks to manipulated the DOM.
	- `data-` HTML attributes are meant to store data, not be bound to
	- Do not use CSS classes for both styles and JavaScript functionality
- Indentation with tabs.
- No whitespace at the end of line or on blank lines.
- Lines should be no longer than 80 characters, and must not exceed 100 (counting tabs as 4 spaces). There are 2 exceptions, both allowing the line to exceed 100 characters:
- If the line contains a comment with a long URL.
- If the line contains a regex literal. This prevents having to use the regex constructor which requires otherwise unnecessary string escaping.
- `if`/`else`/`for`/`while`/`try` always have braces and always go on multiple lines.
- Unary special-character operators (e.g., `!`, `++`) must not have space next to their operand.
- Any `,` and `;` must not have preceding space.
- Any `;` used as a statement terminator must be at the end of the line.
- Any `:` after a property name in an object definition must not have preceding space.
- The `?` and `:` in a ternary conditional must have space on both sides.
- No filler spaces in empty constructs (e.g., `{}`, `[]`, `fn()`)
- New line at the end of each file.

```js
var i = 0;
 
if ( condition ) {
    doSomething();
} else if ( otherCondition ) {
    somethingElse();
} else {
    otherThing();
}
 
while ( !condition ) {
    iterating++;
}
 
for ( ; i < 100; i++ ) {
    object[ array[ i ] ] = someFn( i );
}
 
try {
 
    // Expressions
} catch ( e ) {
 
    // Expressions
}
 
array = [ "*" ];
 
array = [ a, b ];
 
foo( arg );
 
foo( options, object[ property ] );
 
foo( [ a, b ], "property", { c: d } );
 
foo( { a: "alpha", b: "beta" } );
 
foo( [ a, b ] );
 
foo( {
    a: "alpha",
    b: "beta"
} );
 
foo( function() {
 
    // Do stuff
}, options );
 
foo( data, function() {
 
    // Do stuff
} );

map = {
    ready: 9,
    when: 4,
    "you are": 15
};
 
array = [
    9,
    4,
    15
];
 
array = [
    {
        key: val
    }
];
 
array = [
    {
        key: val
    },
    {
        key2: val2
    }
];

```

When a conditional is too long to fit on one line, successive lines must be indented one extra level to distinguish them from the body.

```js
if ( firstCondition() && secondCondition() &&
    	thirdCondition() ) {
	doStuff();
}

```

Chained method calls

```js
elements
    .addClass( "foo" )
    .children()
        .html( "hello" )
    .end()
    .appendTo( "body" );
```


Strict equality checks (===) must be used in favor of abstract equality checks (==). The *only* exception is when checking for undefined and null by way of null.

Leverage `jshint` in Grunt / Gulp scripts. Use `jshint` plugins for IDE if available

_Always_ use semicolons. Don't rely on ASI.

Variable and function names should be full words, using camel case with a lowercase first letter. Names should be descriptive but not excessively so. Exceptions are allowed for iterators, such as the use of i to represent the index in a loop. Constructors do not need a capital first letter.

Each project may expose at most one global variable.

See: [WordPress Example](script.js)

