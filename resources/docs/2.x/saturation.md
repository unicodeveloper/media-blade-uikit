# Saturation

The `x-cld-image` component has a `saturation` attribute. It adjusts the color saturation.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the saturation:</strong></em>
```html
<x-cld-image public-id="lady" saturation="89" />
```

- `89` represents the level of the color saturation. The range is from `-100` to `100`.
- The lower the number, the lower the saturation.
- Server default: `80`

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_saturation:89/lady?_a=AACnOBs">