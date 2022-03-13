/**
 * Grab content from database
 */

function grabText() {
    var text;
    var inputDataValue = document.getElementById('content');
    if (inputDataValue) {
        if (inputDataValue.value != []) {
            text = JSON.parse(inputDataValue.value);
        } else {
            text = [];
        } 
    }

    return text;
}

/**
 * Editor JS Settings, Import Libs for Editor JS
 */

import EditorJS from '@editorjs/editorjs';
const Header = require('@editorjs/header');
const Paragraph = require('@editorjs/paragraph');
import List from '@editorjs/list';
import Embed from '@editorjs/embed';

// Loading EditorJS only if content element is available. 

function getContentElement() {
    var content = document.getElementById('contentEditorJs');
    if (content) {
        return true;
    } else {
        return false;
    }
}

// Connenct EditorJS

if (getContentElement()) {

    const editor = new EditorJS({

        /**
         * onReady callback
         */
        onReady: () => {
            //console.log('Editor.js is ready to work!');
        },

        /**
         * onChange callback
         */
        onChange: () => {
            editor.save()
                .then((savedData) => {
                    var outputData = document.getElementById('content');
                    console.log(JSON.stringify(savedData));
                    outputData.value = JSON.stringify(savedData);
                }).catch((error) => {
                    console.log('Saving failed: ', error);
                });
        },

        /**
         * Main Settings
         */
        holder: 'contentEditorJs',
        tools: {
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            header: {
                class: Header,
                config: {
                    placeholder: 'Введите заголовок',
                    levels: [1, 2, 3, 4],
                    defaultLevel: 3,
                },
            },
            list: {
                class: List,
                inlineToolbar: true,
            },
            embed: {
                class: Embed,
                config: {
                    services: {
                        youtube: true,
                        vimeo: true,
                        twitch: { 
                            regex: /https?:\/\/www.twitch.tv\/([^\/\?\&]*)/,
                            embedUrl: 'https://player.twitch.tv/?channel=<%= remote_id %>&parent=prosimracing.dev',
                            html: "<iframe frameborder='0' allowfullscreen='true' scrolling='no' height='378' width='620'></iframe>",
                            height: 378,
                            width: 620,
                            id: (groups) => groups.join('/embed/'),
                        },
                    },
                }
            }
        },

        data: grabText(),
        // <iframe src="https://player.twitch.tv/?channel=blackufa&parent=www.example.com" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
    });
}