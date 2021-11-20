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
    return null;
  },

  // Define the save function
  save: function (props) {
    return null;
  },

  // Custom functions
  // Todo: Add custom functions.
});
