# TextformatterRockWhatsApp

ProcessWire Textformatter for simple WhatsApp style text formatting:

````
*bold*
_italic_
~strike~
```monospace```
````

Additional non-WhatsApp formats:

```
#monospace#
```

This module does intentionally not support full markdown syntax! It is intended to be used for simple formattings that you usually want to apply to headlines.

## Problem

The `title` field is always available in ProcessWire and it is often used for page headlines. But unfortunately when using such a plain textfield it will not be possible to print some words in bold or italic font.

One solution is to create a CKEditor/TinyMCE field, but it's a lot more tedious to setup. Also it's not easy to make it single-line-only.

## Solution

Just apply this textformatter to your field and you'll get quick and easy headlines with bold and italic fonts that will also work with frontend editing.

Backend Editing:

<img src=https://i.imgur.com/sGpqZPO.png width=500>

Frontend Editing:

<img src=https://i.imgur.com/AC36me2.png width=300>

Formatted:

<img src=https://i.imgur.com/KRUjB3z.png width=300>
