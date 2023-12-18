panel.plugin("rare-beast/block-factory", {
    blocks: {
        accordions: `
        <div @dblclick="open">
        <h1>Accordions</h1><br />
        <div v-if="content.accordions.length">
          <details v-for="(item, index) in content.accordions" class="k-block-type-accordions-item" :key="index">
            <summary style="padding-bottom: 1rem;">{{ item.title }}</summary>
            <div v-html="item.content">></div><br /><br />
          </details><br /><br />
        </div>
        <div v-else>No Accordions yet. Go ahead and add some.</div>
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
                    <h1>{{ content.title }}</h1><br/><br/>
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