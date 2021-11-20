const { registerBlockType } = wp.blocks;
const { __ } = wp.i18n;

registerBlockType("xvr/call-to-action", {
  // Define the block
  title: __("Call to action", "xvr"),
  description: __("Block to generate custom call to action", "xvr"),
  icon: "smiley",
  category: "layout",

  // Custom attributes
  attributes: {},

  // Define the edit function
  edit: function (props) {
    return (
      <div>
        <h2>{__("Call to action", "xvr")}</h2>
      </div>
    );
  },

  // Define the save function
  save: function (props) {
    return null;
  },

  // Custom functions
  // Todo: Add custom functions.
});
