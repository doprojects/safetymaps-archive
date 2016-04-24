// namespacing!
if (!com) {
    var com = { };
    if (!com.modestmaps) {
        com.modestmaps = { };
    }
}

com.modestmaps.StamenProvider = function(style) {
    this.style = style;
}

com.modestmaps.StamenProvider.prototype = {
    style: null,
    getTileUrl: function(coord) {
        coord = this.sourceCoordinate(coord);
        if (coord) {
            var imgPath = [ this.style, coord.zoom, coord.column, coord.row ].join('/');
            var url = 'http://tile.stamen.com/' + imgPath + '.png';
            return url;
        }
    }
}

com.modestmaps.extend(com.modestmaps.StamenProvider, com.modestmaps.MapProvider);
