If you ever need to convert JSON file or structures to PHP-style arrays, with all the nesting levels, you can use this function.
First, you must json_decode($yourJSONdata) and then pass it to this function.
It will output to your browser window (or console) the correct PHP styled arrays.

Example JSON 
```json
[
  {
    "fields": {
      "id": {
        "type": "input-hidden",
        "value": "text"
      },
      "text": {
        "type": "textarea-split",
        "label": "Name",
        "value": [
          "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
          "Explicabo velit minus quam impedit sed assumenda magni fugiat vero ipsa quidem."
        ],
        "info": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!"
      },
      "alignmargin": {
        "type": "alignmargin",
        "align": {
          "type": "align",
          "label": "Alignment",
          "value": [
            {
              "value": "left",
              "selected": true
            },
            {
              "value": "center",
              "selected": false
            },
            {
              "value": "right",
              "selected": false
            }
          ],
          "info": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!"
        },
        "margin": {
          "type": "margin",
          "label": "Margin",
          "info": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!",
          "mt": {
            "label": "Top",
            "value": "0"
          },
          "mb": {
            "label": "Bottom",
            "value": "0"
          }
        }
      },
      "size": {
        "type": "select",
        "label": "Size",
        "value": [
          {
            "label": "Extra small",
            "value": ".85",
            "selected": false
          },
          {
            "label": "Small",
            "value": ".95",
            "selected": false
          },
          {
            "label": "Medium",
            "value": "1",
            "selected": true
          },
          {
            "label": "Big",
            "value": "1.25",
            "selected": false
          }
        ,
          {
            "label": "Large",
            "value": "1.65",
            "selected": false
          }
        ],
        "info": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!"
      }
    },
    "icon": "comp-text",
    "title": "Text",
    "category": "text"
  },

]
```

will be converted to 

```php
["0"] => array (
	["fields"] => array (
		["id"] => array (
			["type"] => "input-hidden",
			["value"] => "text",
		),
		["text"] => array (
			["type"] => "textarea-split",
			["label"] => "Name",
			["value"] => array (
				["0"] => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.",
				["1"] => "Explicabo velit minus quam impedit sed assumenda magni fugiat vero ipsa quidem.",
			),
			["info"] => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!",
		),
		["alignmargin"] => array (
			["type"] => "alignmargin",
			["align"] => array (
				["type"] => "align",
				["label"] => "Alignment",
				["value"] => array (
					["0"] => array (
						["value"] => "left",
						["selected"] => 1,
					),
					["1"] => array (
						["value"] => "center",
						["selected"] => "",
					),
					["2"] => array (
						["value"] => "right",
						["selected"] => "",
					),
				),
				["info"] => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!",
			),
			["margin"] => array (
				["type"] => "margin",
				["label"] => "Margin",
				["info"] => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!",
				["mt"] => array (
					["label"] => "Top",
					["value"] => 0,
				),
				["mb"] => array (
					["label"] => "Bottom",
					["value"] => 0,
				),
			),
		),
		["size"] => array (
			["type"] => "select",
			["label"] => "Size",
			["value"] => array (
				["0"] => array (
					["label"] => "Extra small",
					["value"] => .85,
					["selected"] => "",
				),
				["1"] => array (
					["label"] => "Small",
					["value"] => .95,
					["selected"] => "",
				),
				["2"] => array (
					["label"] => "Medium",
					["value"] => 1,
					["selected"] => 1,
				),
				["3"] => array (
					["label"] => "Big",
					["value"] => 1.25,
					["selected"] => "",
				),
				["4"] => array (
					["label"] => "Large",
					["value"] => 1.65,
					["selected"] => "",
				),
			),
			["info"] => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eaque tenetur aperiam nesciunt, saepe officiis!",
		),
	),
	["icon"] => "comp-text",
	["title"] => "Text",
	["category"] => "text",
),
```

