panel.plugin("rarebeast/audio", {
    blocks: {
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
        }
    }
});