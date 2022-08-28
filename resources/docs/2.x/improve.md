# Improve

The `x-cld-image` component has an `improve-mode` attribute. It adjusts an image's colors, contrast and brightness to improve its appearance.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the improve-mode:</strong></em>
```html
<x-cld-image public-id="lady" improve-mode='indoor_100' />
```

- `indoor` represents the mode. The other value is `outdoor`.
- `100` represents the blend value, where `0` means use only the original and `100` means use only the improved result.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_improve:indoor:100/lady?_a=AACnOBs">