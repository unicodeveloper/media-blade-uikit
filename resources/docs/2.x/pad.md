# Crop - Pad

The `x-cld-image` component has a `crop` attribute with a `pad` value.

The `pad` crop mode resizes the image to fill the specified dimensions while retaining the original aspect ratio and with all of the original image visible. If the proportions of the original image do not match the specified dimensions, padding is added to the image to reach the required size.

You can also specify where the original image is placed by using the `gravity` attribute (set to center by default), and specify the color of the background in the case that padding is added.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop pad:</strong></em>
```html
<x-cld-image public-id="lady" crop="pad" bg-color="black" width="500" height="500"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_pad,h_500,w_500/b_black/lady?_a=AACnOBs">
