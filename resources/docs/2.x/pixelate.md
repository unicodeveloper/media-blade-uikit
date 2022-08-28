# Pixelate

The `x-cld-image` component has a `pixelate` attribute. It applies a pixelation effect.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the pixelate:</strong></em>
```html
<x-cld-image public-id="lady" pixelate="25"/>
```

- `25` represents the width in pixels of each pixelation square. Range: 1 to 200. The default is determined by an algorithm based on the image dimensions.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_pixelate:25/lady?_a=AACnOBs">