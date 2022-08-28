# Colorize

The `x-cld-image` component has a `colorize` attribute. It colorizes an image. By default, gray is used for colorization. You can specify a different color by changing its value to a rgba/hex color and also specify the strength of the color.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/couple">

<em><strong>Apply the colorize:</strong></em>

```html
<x-cld-image public-id="couple" colorize="red_45" />
```

- `red` represents the color
- `45` represents the strength of the color.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/co_red,e_colorize:45/couple">

Another example:

```html
<x-cld-image public-id="couple" colorize="rgb:0000_35" />
```

- `rgb:0000` represents the color
- `35` represents the strength of the color.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/co_rgb:0000,e_colorize:35/couple">



