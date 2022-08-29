# Blackwhite

The `x-cld-image` component has a `blackwhite` attribute. It converts an image to black and white.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">

<em><strong>Apply the blackwhite:</strong></em>
```html
<x-cld-image public-id="lady" blackwhite/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_blackwhite/lady?_a=AACnOBs">


#### Another example:

```html
<x-cld-image public-id="lady" blackwhite="59"/>
```

- `59` represents the threshold. The balance between black (100) and white (0).

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_blackwhite:59/e_blackwhite/lady?_a=AACnOBs">