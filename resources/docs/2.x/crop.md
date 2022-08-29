# Crop - Crop

The `x-cld-image` component has a `crop` attribute with a `crop` value. Haha, I know what you are thinking!.

The `crop` cropping mode extracts a region of the specified dimensions or a detected object from the original image. No scaling is applied, so if you specify dimensions, applying the crop mode to the same image of different resolutions can provide very different results.

Furthermore, you can specify the `gravity` parameter to select which area or object to extract.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop crop:</strong></em>
```html
<x-cld-image public-id="lady" crop="crop" width="600" height="600" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_crop,h_600,w_600/lady?_a=AACnOBs">

#### Example, with a focus on cropping the face:

```html
<x-cld-image public-id="lady" crop="crop" gravity="face" width="600" height="600" />
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_crop,g_face,h_600,w_600/lady?_a=AACnOBs">

#### Example, with a focus on cropping to a specific location of the image, e.g South East:

```html
<x-cld-image public-id="lady" crop="crop" gravity="compass:south_east" width="600" height="600" />
```

- `compass` - represents the attribute value that must be specified if you want the focus on a specific location of the image.
- `south_east` - represents the location. Other values that can be provided are: `east`, `west`, `north`, `south`, `north_east`, `north_west`, `south_west`.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_crop,g_south_east,h_600,w_600/lady?_a=AACnOBs">