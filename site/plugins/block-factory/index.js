panel.plugin("rare-beast/block-factory", {
    blocks: {
        accordions: `
        <div>
            <div v-if="content.summary">
            <details>
                <summary>{{ content.summary }}</summary>
                <div v-if="content.details" v-html="content.details"></div>
            </details>
            </div>
            <div v-else>
            No content yet
            </div>
        </div>
            `,
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
                    <h1>{{ content.title }}</h1>
                    <audio controls>
                        <source :src="source.url" type="audio/mpeg">
                    </audio>
                </div>
                <div v-else>No audio selected</div>
                </div>
            `
        },
        columncontent: `
            <div @click="open">
                {{ content.text}}
                <h1>Column Content</h1>
            </div>
            `,
    }
});