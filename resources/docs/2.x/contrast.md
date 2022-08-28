# Contrast

The `x-cld-image` component has a `contrast` attribute. It adjusts the contrast.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the contrast:</strong></em>
```html
<x-cld-image public-id="lady" contrast="89" />
```

- `89` represents the level of contrast. The range is from `-100` to `100`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_contrast:89/lady?_a=AACnOBs">