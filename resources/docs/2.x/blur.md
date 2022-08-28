# Blur

The `x-cld-image` component has a `blur` attribute. It applies a blurring filter to an image.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the blur:</strong></em>
```html
<x-cld-image public-id="lady" blur="599" />
```

- `599` represents the strength of the blur. The strength (value) of the blur ranges from `1` to `2000`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_blur:599/lady">