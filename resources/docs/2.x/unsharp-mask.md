# Unsharp Mask

The `x-cld-image` component has an `unsharp-mask` attribute. It applies an unsharp mask filter to the image.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the unsharp-mask:</strong></em>
```html
<x-cld-image public-id="lady" unsharp-mask="1799" />
```

- `1799` represents the strength of the filter. The range is from `1` to `2000`.
- Server default: `100`

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_unsharp_mask:1799/lady?_a=AACnOBs">