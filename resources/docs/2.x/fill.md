# Crop - Fill

The `x-cld-image` component has a `crop` attribute with a `fill` value.

The `fill` cropping mode creates an image with the exact specified dimensions, without distorting the image.

This option first scales up or down as much as needed to at least fill both of the specified dimensions. If the requested aspect ratio is different than the original, cropping will occur on the dimension that exceeds the requested size after scaling.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop fill:</strong></em>
```html
<x-cld-image public-id="lady" crop="fill" width="600" height="600" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_fill,h_600,w_600/lady?_a=AACnOBs">