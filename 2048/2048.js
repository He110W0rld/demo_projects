var field = 
[
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0],
	[0, 0, 0, 0]
]

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function isAvailableCell(x, y) {
	if (field[x][y] == 0) {
		return true;
	}
	return false;
}

function spawn() {
	avalaibleCells = [];
	values = [2, 4];
	for (x = 0; x < field.length; x++) {
		for (y = 0; y < field[x].length; y++) {
			if (isAvailableCell(x, y)) {
				avalaibleCells.push([x, y]);
			}
		}
	}
	if (avalaibleCells.length > 0) {
		coordsKey = getRandomInt(0, avalaibleCells.length-1);
		valuesKey = getRandomInt(0, values.length-1);
		value = values[valuesKey];
		coords = avalaibleCells[coordsKey];
		field[coords[0]][coords[1]] = value;

		
	}
	else {
		alert('Вы проиграли!');
	}

}

function isNeighbour(x, y, value) {
	if ((field[x][y] == value) && (y <= 0)) {
		return true;
	}
	return false;
}

function redraw() {
        var html = '';
        var row = '';
        var cell = '';

        for(var i = 0; i < 4; i++) {
            row = '<div class="row">';
            for(var j = 0; j < 4; j++) {
                var num = field[i][j];
                var numText = num ? num.toString() : '';
                cell = '<div class="col cell_'+num+'">' + numText + '</div>';
                row += cell;
            }
            row += '</div>';
            html += row;
        }

        document.getElementById('table').innerHTML = html;
}


function moveLeft() {
	for (x = 0; x < field.length; x++) {
		for (var j = 0; j < field.length; j++) {
			for (y = 0; y < field[x].length-1; y++) {
				if ((field[x][y] == 0) && (field[x][y+1] != 0)) {
					field[x][y] = field[x][y+1];					
					field[x][y+1] = 0;
				}
			}
		}
	}

	for (x = 0; x < field.length; x++) {
		var join = 1;
		var start = 0;
		while (join) {
			join = 0;
			for (y = start; y < field[x].length-1; y++) {
				if (field[x][y] == field[x][y+1]) {
					field[x][y] *= 2;
					for (var i = y+1; i < field[x].length-1; i++) {
						field[x][i] = field[x][i+1];
					}
					field[x][field[x].length-1] = 0;
					join = 1;
					start++;
				}
			}
		}
	}

}

function moveRight() {
	for (x = 0; x < field.length; x++) {
		for (var j = 0; j < field.length; j++) {
			for (y = field[x].length-1; y > 0; y--) {
				if ((field[x][y] == 0) && (field[x][y-1] != 0)) {
					field[x][y] = field[x][y-1];					
					field[x][y-1] = 0;
				}
			}
		}
	}

	for (x = 0; x < field.length; x++) {
		var join = 1;
		var end = 3;
		while (join) {
			join = 0;
			for (y = end; y > 0; y--) {
				if (field[x][y] == field[x][y-1]) {
					field[x][y] *= 2;
					for (var i = y-1; i > 0; i--) {
						field[x][i] = field[x][i-1];
					}
					field[x][0] = 0;
					join = 1;
					end--;
				}
			}
		}
	}
}

function moveDown() {
	for (y = 0; y < field.length; y++) {
		for (var j = 0; j < field.length; j++) {
			for (x = field[y].length-1; x > 0; x--) {
				if ((field[x][y] == 0) && (field[x-1][y] != 0)) {
					field[x][y] = field[x-1][y];					
					field[x-1][y] = 0;
				}
			}
		}
	}

	for (y = 0; y < field.length; y++) {
		var join = 1;
		var end = 3;
		while (join) {
			join = 0;
			for (x = end; x > 0; x--) {
				if (field[x][y] == field[x-1][y]) {
					field[x][y] *= 2;
					for (var i = x-1; i > 0; i--) {
						field[i][y] = field[i-1][y];
					}
					field[0][y] = 0;
					join = 1;
					end--;
				}
			}
		}
	}
}

function moveUp() {
	for (y = 0; y < field.length; y++) {
		for (var j = 0; j < field.length; j++) {
			for (x = 0; x < field[y].length-1; x++) {
				if ((field[x][y] == 0) && (field[x+1][y] != 0)) {
					field[x][y] = field[x+1][y];					
					field[x+1][y] = 0;
				}
			}
		}
	}

	for (y = 0; y < field.length; y++) {
		var join = 1;
		var start = 0;
		while (join) {
			join = 0;
			for (x = start; x < field[y].length-1; x++) {
				if (field[x][y] == field[x+1][y]) {
					field[x][y] *= 2;
					for (var i = x+1; i > field[y].length-1; i++) {
						field[i][y] = field[i+1][y];
					}
					field[field[y].length-1][y] = 0;
					join = 1;
					start++;
				}
			}
		}
	}

}

$(document).ready(function(){
	start();
	redraw();
})

$(document).keydown(function(event) {
	switch(event.keyCode) {
		case 37: //left arrow
			moveLeft();
			break;
		case 38: //up arrow
			moveUp();
			break;
		case 39: // right arrow
			moveRight();
			break;
		case 40: // down arrow
			moveDown();
			break;
		default:
			break;
	}
	spawn();
	redraw();
})


function start() {
	spawn();
}