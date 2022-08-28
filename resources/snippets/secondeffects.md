```html
/**
 *  negate
 *  Creates a negative of an image.
 */
<x-cld-image public-id="couple" negate />

/**
 *  oil-paint
 *  Applies an oil painting effect.
 */
<x-cld-image public-id="couple" oil-paint />
<x-cld-image public-id="couple" oil-paint="78" />

/**
 *  vignette
 *  Applies a vignette effect to an image.
 *  The strength level of the vignette. Range: 0 to 100
 */
<x-cld-image public-id="couple" vignette />
<x-cld-image public-id="couple" vignette="78" />


/**
 *  simulate-colorblind
 *  Simulates the way an image would appear to someone with the specified color blind condition.
 *  The color blind condition to simulate. Possible values: deuteranopia, protanopia, tritanopia, tritanomaly,
 *  deuteranomaly, cone_monochromacy, rod_monochromacy
 */
<x-cld-image public-id="couple" simulate-colorblind />
<x-cld-image public-id="couple" simulate-colorblind="protanopia" />


/**
 *  pixelate
 *  Applies a pixelation effect.
 *  The width in pixels of each pixelation square. Range: 1 to 200. Default: Determined by an algorithm based on the image dimensions.
 */
<x-cld-image public-id="couple" pixelate />
<x-cld-image public-id="couple" pixelate="5" />

```
