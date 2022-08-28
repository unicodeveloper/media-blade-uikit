# Trim

The `x-cld-image` component has a `trim` attribute. It detects and removes image edges whose color is similar to the corner pixels.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/casual_yellow_red_corners.png">


<em><strong>Apply the trim:</strong></em>
```html
<x-cld-image public-id="casual_yellow_red_corners" trim="50_yellow" />
```

- `50` represents the color similarity. The level of tolerance for color similarity ranges from `0` to `100`.
- `yellow` represents the color to trim. It accepts rgba/hex code.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_trim:50:yellow/casual_yellow_red_corners">