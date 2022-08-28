# Gamma

The `x-cld-image` component has a `gamma` attribute. It adjusts the gamma level.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the brightness:</strong></em>
```html
<x-cld-image public-id="lady" gamma="123" />
```

- `123` represents the level of gamma. The range is from `-50` to `150`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_gamma:123/lady?_a=AACnOBs">