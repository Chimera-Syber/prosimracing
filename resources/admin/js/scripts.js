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
import ImageTool from '@editorjs/image';

// Loading EditorJS only if content element is available. 

function getContentElement() {
    var content = document.getElementById('contentEditorJs');
    if (content) {
        return true;
    } else {
        return false;
    }
}

// Route for upload image

function uploadFileRoute() {
    let uploadFile = document.location.origin + '/pitbox/posts/uploadimage';
    return uploadFile;
}

// Hostname

function pageHostName() {
    let hostName = window.location.hostname;
    console.log(hostName);
    return hostName;
}

var _token = $('input[name="_token"]').val();

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
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: uploadFileRoute(),
                    },
                    additionalRequestData: {
                        enctype: 'multipart/form-data',
                        '_token': _token,
                    },
                    types: 'file',
                }
            },
            embed: {
                class: Embed,
                config: {
                    services: {
                        youtube: true,
                        vimeo: true,
                        twitch: { 
                            regex: /https?:\/\/www.twitch.tv\/([^\/\?\&]*)/,
                            embedUrl: 'https://player.twitch.tv/?channel=<%= remote_id %>&parent=' + pageHostName(),
                            html: "<iframe frameborder='0' allowfullscreen='true' scrolling='no' height='378' width='620'></iframe>",
                            height: 480,
                            width: 848,
                            id: (groups) => groups.join('/embed/'),
                        },
                    },
                }
            }
        },

        data: grabText(),

    });
}