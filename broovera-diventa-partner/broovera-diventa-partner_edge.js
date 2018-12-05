/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "6.0.0",
                minimumCompatibleVersion: "5.0.0",
                build: "6.0.0.400",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'macFabio2',
                            type: 'image',
                            rect: ['-750px', '0px', '730px', '423px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"macFabio.png",'0px','0px']
                        },
                        {
                            id: 'unnamed2',
                            type: 'image',
                            rect: ['276px', '638px', '200px', '402px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"unnamed.png",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: [undefined, undefined, '730px', '630px'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,1)"]
                        }
                    }
                },
                timeline: {
                    duration: 5000,
                    autoPlay: true,
                    data: [
                        [
                            "eid8",
                            "left",
                            2500,
                            2500,
                            "linear",
                            "${unnamed2}",
                            '276px',
                            '265px'
                        ],
                        [
                            "eid7",
                            "left",
                            0,
                            2500,
                            "linear",
                            "${macFabio2}",
                            '-750px',
                            '0px'
                        ],
                        [
                            "eid9",
                            "top",
                            2500,
                            2500,
                            "linear",
                            "${unnamed2}",
                            '638px',
                            '222px'
                        ],
                        [
                            "eid10",
                            "height",
                            5000,
                            0,
                            "linear",
                            "${Stage}",
                            '630px',
                            '630px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("broovera-diventa-partner_edgeActions.js");
})("EDGE-264289843");
