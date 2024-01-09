panel.plugin("rare-beast/block-factory", {
    blocks: {

        accordions: {
            computed: {
                items() {
                    return this.content.accordions || [];
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="plus"></k-icon>
                        <span class="k-block-type-fields-header">Accordions</span>
                    </div>
                    <div class="accordions">
                        <div v-if="items.length">
                            <details v-for="(item, index) in items" class="accordion" :key="index" open>
                                <summary class="accordion__title">{{ item.title }}</summary>
                                <p class="accordion__content" v-html="item.content"></p>
                            </details>
                        </div>
                        <div v-else>No Accordions yet. Go ahead and add some.</div>
                    </div>
                </div>
            `
        },

        audio: {
            computed: {
                source() {
                    return this.content.source[0] || {};
                    // We just checked to see if the file exists
                    // If it does, we return the file object
                    // If it doesn't, we return an empty object
                }
            },
            template: `
                <div>
                <div v-if="source.url">
                    <span>{{ content.title }}</span><br/><br/>
                    <audio controls>
                        <source :src="source.url" type="audio/mpeg">
                    </audio>
                </div>
                <div v-else>No audio selected.</div>
                </div>
            `
        },

        headline: {
            computed: {
                level() {
                    return this.content.level || 'No headline level found';
                },
                text() {
                    return this.content.text || 'No headline text found';
                }
            },
            template: `
                <div @dblclick="open">
                    <div v-if="level !== 'No headline level found' && text !== 'No headline text found'">
                        <strong>{{ level.toUpperCase() }}:</strong> {{ text }}
                    </div>
                    <div v-else>No headline details found.</div>
                </div>
            `
        },
        
        subheadline: {
            computed: {
                level() {
                    return this.content.level || 'No subheadline level found';
                },
                text() {
                    return this.content.text || 'No subheadline text found';
                }
            },
            template: `
                <div @dblclick="open">
                    <div v-if="level !== 'No subheadline level found' && text !== 'No subheadline text found'">
                        <strong>{{ level.toUpperCase() }}:</strong> {{ text }}
                    </div>
                    <div v-else>No subheadline details found.</div>
                </div>
            `
        },


        button: {
            computed: {
                btn_title() {
                    return this.content.btn_title || 'No title';
                },
                btn_url() {
                    return this.content.btn_url || 'No URL';
                },
                btn_style() {
                    return this.content.btn_style || 'No style';
                },
                btn_target() {
                    return this.content.btn_target || 'No target';
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="btn" v-if="btn_title !== 'No title'">
                        {{ btn_title }}
                    </div>
                    <div v-if="btn_url !== 'No URL'">
                        <div class="btn__info">
                            <strong>URL:</strong> {{ btn_url }}
                        </div>
                    </div>
                    <div v-if="btn_style !== 'No style'">
                        <div class="btn__info">
                            <strong>Style:</strong> {{ btn_style }}
                        </div>
                    </div>
                    <div v-if="btn_target !== 'No target'">
                        <div class="btn__info">
                            <strong>Target:</strong> {{ btn_target }}
                        </div>
                    </div>
                    <div v-else>No button details found.</div>
                </div>
            `
        },

        copy: {
            computed: {
                text() {
                    return this.content ? this.content.text || 'No text found' : 'No content found';
                }
            },
            template: `
                <div @dblclick="open">
                    <div v-if="text !== 'No text found'">
                        <p>{{ text }}</p>
                    </div>
                    <div v-else>No text details found.</div>
                </div>
            `
        },
        
        cta: {
            computed: {
                cta_title() {
                    return this.content.cta_title || 'No title';
                },
                cta_url() {
                    return this.content.cta_url || 'No URL';
                },
                cta_style() {
                    return this.content.cta_style || 'No style';
                },
                cta_target() {
                    return this.content.cta_target || 'No target';
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="cta" v-if="cta_title !== 'No title'">
                        {{ cta_title }}
                    </div>
                    <div v-if="cta_url !== 'No URL'">
                        <div class="cta__info">
                            <strong>URL:</strong> {{ cta_url }}
                        </div>
                    </div>
                    <div v-if="cta_style !== 'No style'">
                        <div class="cta__info">
                            <strong>Style:</strong> {{ cta_style }}
                        </div>
                    </div>
                    <div v-if="cta_target !== 'No target'">
                        <div class="cta__info">
                            <strong>Target:</strong> {{ cta_target }}
                        </div>
                    </div>
                    <div v-else>No button details found.</div>
                </div>
            `
        },

        media: {
            computed: {
                media_type() {
                    return this.content.media_type || 'No media type';
                },
                image() {
                    return this.content.image.length ? this.content.image[0] : null;
                },
                video_link() {
                    return this.content.video_link || null;
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="image"></k-icon>
                        <span class="k-block-type-fields-header">Media</span>
                    </div>

                    <div v-if="image">
                        <img :src="image.url" class="media__image">
                    </div>
                    <div v-if="video_link">
                        <video controls>
                            <source :src="video_link" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            `
        },
        
        'media-content': {
            computed: {
                media_type() {
                    return this.content.media_type || 'No media type';
                },
                image() {
                    return this.content.image.length ? this.content.image[0] : null;
                },
                video_link() {
                    return this.content.video_link || null;
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="grid-left"></k-icon>
                        <span class="k-block-type-fields-header">Media & Content</span>
                    </div>

                    <div v-if="image">
                        <img :src="image.url" class="media__image">
                    </div>
                    <div v-if="video_link">
                        <video controls>
                            <source :src="video_link" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            `
        },
    }
});