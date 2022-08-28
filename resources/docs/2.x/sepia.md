# Sepia

The `x-cld-image` component has a `sepia` attribute. It changes the color scheme of an image to sepia.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">

<em><strong>Apply the sepia:</strong></em>
```html
<x-cld-image public-id="lady" sepia="50"/>
```

- `50` represents the level of sepia to apply. Range: `1` to `100`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_sepia:50/lady?_a=AACnOBs">
