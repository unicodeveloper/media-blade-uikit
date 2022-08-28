# Shadow

The `x-cld-image` component has a `shadow` attribute. It applies a gray shadow to the bottom right of an image. You can change the color and location of the shadow using the value of the `shadow` as shown below.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the shadow:</strong></em>
```html
<x-cld-image public-id="lady" shadow="rgb:999_-15_15_50"/>
```

The format of the shadow is _color_offsetX_offsetY_strength_

- `rgb:999` represents the color of the shadow.
- `-15` represents the offsetX location. Offset of 15 pixels to the left
- `15` represents the offsetY location. Offset of 15 pixels down.
- `50` represents the strength of the shadow. Range: `0` to `100`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/co_rgb:999,e_shadow:50,x_-15,y_15/lady?_a=AACnOBs">