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
                            <details v-for="(item, index) in items" class="accordion" :key="index" :open="index === 0">
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
                        <video muted autoplay loop playsinline>
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
                },
                contentBlocks() {
                    return this.content.content.map(block => {
                        // Transform the block into a format that the template can easily loop through
                        // The exact transformation depends on the structure of your block objects
                        return {
                            type: block.type,
                            content: block.content
                        };
                    }) || [];
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="grid-left"></k-icon>
                        <span class="k-block-type-fields-header">Media & Content</span>
                    </div>
                    <div class="media-content__inner">
                        <div v-if="image" class="media__image">
                            <img :src="image.url">
                        </div>
                        <div v-if="video_link" class="media__image">
                            <video muted autoplay loop playsinline>
                                <source :src="video_link" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="media__content">
                            <div v-for="(block, index) in contentBlocks" :key="index">
                                <div v-if="block.type === 'headline'" class="headline">
                                    <component
                                        :is="block.content.level"
                                        :class="block.content.level"
                                        v-html="block.content.text"
                                    >
                                        {{ block.content.text }}
                                    </component>
                                </div>
                                <div v-else-if="block.type === 'subheadline'" class="subheadline">
                                    <component
                                        :is="block.content.level"
                                        :class="block.content.level"
                                        v-html="block.content.text"
                                    >
                                        {{ block.content.text }}
                                    </component>
                                </div>
                                <div v-else-if="block.type === 'copy'" class="copy">
                                    <component v-html="block.content.text"></component>
                                </div>
                                <div v-else-if="block.type === 'button'" class="button">
                                    <div class="btn" v-if="block.content.btn_title">
                                        {{ block.content.btn_title }}
                                    </div>
                                    <div class="btn__details">
                                        <div v-if="block.content.btn_url">
                                            <div class="btn__info">
                                                <strong>URL:</strong> {{ block.content.btn_url }}
                                            </div>
                                        </div>
                                        <div v-if="block.content.btn_style">
                                            <div class="btn__info">
                                                <strong>Style:</strong> {{ block.content.btn_style }}
                                            </div>
                                        </div>
                                        <div v-if="block.content.btn_target">
                                            <div class="btn__info">
                                                <strong>Target:</strong> {{ block.content.btn_target }}
                                            </div>
                                        </div>
                                        <div v-else>No button details found.</div>
                                    </div>
                                </div>
                                <div v-else-if="block.type === 'cta'" class="call-to-action">
                                    <div class="cta" v-if="block.content.cta_title">
                                        {{ block.content.cta_title }}
                                    </div>
                                    <div class="cta__details">
                                        <div v-if="block.content.cta_url">
                                            <div class="cta__info">
                                                <strong>URL:</strong> {{ block.content.cta_url }}
                                            </div>
                                        </div>
                                        <div v-if="block.content.cta_style">
                                            <div class="cta__info">
                                                <strong>Style:</strong> {{ block.content.cta_style }}
                                            </div>
                                        </div>
                                        <div v-if="block.content.cta_target">
                                            <div class="cta__info">
                                                <strong>Target:</strong> {{ block.content.cta_target }}
                                            </div>
                                        </div>
                                        <div v-else>No button details found.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `
        },

        'image-slider': {
            computed: {
                slides() {
                    return this.content.slides.map(slide => {
                        const image = slide.image && slide.image.length > 0 ? slide.image[0] : null;
                        return {
                            ...slide,
                            imageUrl: image ? image.url : null,
                            videoLink: slide.video_link || null
                        };
                    }) || [];
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="images"></k-icon>
                        <span class="k-block-type-fields-header">Image Slider</span>
                    </div>
                    <div v-if="slides.length" class="image-slider">
                        <div v-for="(slide, index) in slides" :key="index">
                            <div v-if="slide.videoLink" class="video">
                                <video muted autoplay loop playsinline>
                                    <source :src="slide.videoLink" type="video/mp4">
                                </video>
                            </div>
                            <div v-else class="image">
                                <img :src="slide.imageUrl" :alt="slide.image.alt">
                            </div>
                        </div>
                    </div>
                    <div v-else>No slides yet. Go ahead and add some.</div>
                </div>
            `
        },
        hero: {
            computed: {
                contentBlocks() {
                    return this.content.content.map(block => {
                        // Transform the block into a format that the template can easily loop through
                        // The exact transformation depends on the structure of your block objects
                        return {
                            type: block.type,
                            content: block.content
                        };
                    }) || [];
                },
                slides() {
                    return this.content.slides.map(slide => {
                        const image = slide.image && slide.image.length > 0 ? slide.image[0] : null;
                        return {
                            ...slide,
                            imageUrl: image ? image.url : null,
                            videoLink: slide.video_link || null
                        };
                    }) || [];
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="wand"></k-icon>
                        <span class="k-block-type-fields-header">Hero</span>
                    </div>
                    <div v-for="(block, index) in contentBlocks" :key="index">
                        <div v-if="block.type === 'headline'" class="headline">
                            <component
                                :is="block.content.level"
                                :class="block.content.level"
                                v-html="block.content.text"
                            >
                                {{ block.content.text }}
                            </component>
                        </div>
                        <div v-else-if="block.type === 'subheadline'" class="subheadline">
                            <component
                                :is="block.content.level"
                                :class="block.content.level"
                                v-html="block.content.text"
                            >
                                {{ block.content.text }}
                            </component>
                        </div>
                        <div v-else-if="block.type === 'copy'" class="copy">
                            <component v-html="block.content.text"></component>
                        </div>
                        <div v-else-if="block.type === 'button'" class="button">
                            <div class="btn" v-if="block.content.btn_title">
                                {{ block.content.btn_title }}
                            </div>
                            <div class="btn__details">
                                <div v-if="block.content.btn_url">
                                    <div class="btn__info">
                                        <strong>URL:</strong> {{ block.content.btn_url }}
                                    </div>
                                </div>
                                <div v-if="block.content.btn_style">
                                    <div class="btn__info">
                                        <strong>Style:</strong> {{ block.content.btn_style }}
                                    </div>
                                </div>
                                <div v-if="block.content.btn_target">
                                    <div class="btn__info">
                                        <strong>Target:</strong> {{ block.content.btn_target }}
                                    </div>
                                </div>
                                <div v-else>No button details found.</div>
                            </div>
                        </div>
                        <div v-else-if="block.type === 'cta'" class="call-to-action">
                            <div class="cta" v-if="block.content.cta_title">
                                {{ block.content.cta_title }}
                            </div>
                            <div class="cta__details">
                                <div v-if="block.content.cta_url">
                                    <div class="cta__info">
                                        <strong>URL:</strong> {{ block.content.cta_url }}
                                    </div>
                                </div>
                                <div v-if="block.content.cta_style">
                                    <div class="cta__info">
                                        <strong>Style:</strong> {{ block.content.cta_style }}
                                    </div>
                                </div>
                                <div v-if="block.content.cta_target">
                                    <div class="cta__info">
                                        <strong>Target:</strong> {{ block.content.cta_target }}
                                    </div>
                                </div>
                                <div v-else>No button details found.</div>
                            </div>
                        </div>
                    </div>
                    <div v-if="slides.length === 1" class="single-slide">
                        <div v-if="slides[0].videoLink" class="video">
                            <video muted autoplay loop playsinline>
                                <source :src="slides[0].videoLink" type="video/mp4">
                            </video>
                        </div>
                        <div v-else class="image">
                            <img :src="slides[0].imageUrl" :alt="slides[0].image.alt">
                        </div>
                    </div>
                    <div v-else-if="slides.length > 1" class="image-slider">
                        <div v-for="(slide, index) in slides" :key="index">
                            <div v-if="slide.videoLink" class="video">
                                <video muted autoplay loop playsinline>
                                    <source :src="slide.videoLink" type="video/mp4">
                                </video>
                            </div>
                            <div v-else class="image">
                                <img :src="slide.imageUrl" :alt="slide.image.alt">
                            </div>
                        </div>
                    </div>
                    <div v-else>No slides yet. Go ahead and add some.</div>
                </div>
            `
        },
        content: {
            computed: {
                contentBlocks() {
                    return this.content.content.map(block => {
                        // Transform the block into a format that the template can easily loop through
                        // The exact transformation depends on the structure of your block objects
                        return {
                            type: block.type,
                            content: block.content
                        };
                    }) || [];
                }
            },
            template: `
                <div @dblclick="open">
                    <div class="k-block-title">
                        <k-icon type="text"></k-icon>
                        <span class="k-block-type-fields-header">Content</span>
                    </div>
                    <div v-for="(block, index) in contentBlocks" :key="index">
                        <div v-if="block.type === 'headline'" class="headline">
                            <component
                                :is="block.content.level"
                                :class="block.content.level"
                                v-html="block.content.text"
                            >
                                {{ block.content.text }}
                            </component>
                        </div>
                        <div v-else-if="block.type === 'subheadline'" class="subheadline">
                            <component
                                :is="block.content.level"
                                :class="block.content.level"
                                v-html="block.content.text"
                            >
                                {{ block.content.text }}
                            </component>
                        </div>
                        <div v-else-if="block.type === 'copy'" class="copy">
                            <component v-html="block.content.text"></component>
                        </div>
                        <div v-else-if="block.type === 'button'" class="button">
                            <div class="btn" v-if="block.content.btn_title">
                                {{ block.content.btn_title }}
                            </div>
                            <div class="btn__details">
                                <div v-if="block.content.btn_url">
                                    <div class="btn__info">
                                        <strong>URL:</strong> {{ block.content.btn_url }}
                                    </div>
                                </div>
                                <div v-if="block.content.btn_style">
                                    <div class="btn__info">
                                        <strong>Style:</strong> {{ block.content.btn_style }}
                                    </div>
                                </div>
                                <div v-if="block.content.btn_target">
                                    <div class="btn__info">
                                        <strong>Target:</strong> {{ block.content.btn_target }}
                                    </div>
                                </div>
                                <div v-else>No button details found.</div>
                            </div>
                        </div>
                        <div v-else-if="block.type === 'cta'" class="call-to-action">
                            <div class="cta" v-if="block.content.cta_title">
                                {{ block.content.cta_title }}
                            </div>
                            <div class="cta__details">
                                <div v-if="block.content.cta_url">
                                    <div class="cta__info">
                                        <strong>URL:</strong> {{ block.content.cta_url }}
                                    </div>
                                </div>
                                <div v-if="block.content.cta_style">
                                    <div class="cta__info">
                                        <strong>Style:</strong> {{ block.content.cta_style }}
                                    </div>
                                </div>
                                <div v-if="block.content.cta_target">
                                    <div class="cta__info">
                                        <strong>Target:</strong> {{ block.content.cta_target }}
                                    </div>
                                </div>
                                <div v-else>No button details found.</div>
                            </div>
                        </div>
                    </div>
                </div>
            `
        }
    }
});