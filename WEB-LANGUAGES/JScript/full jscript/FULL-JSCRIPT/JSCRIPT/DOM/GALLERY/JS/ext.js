function doChange(id,source){
	document.getElementById(id).src = source;	
}

function zoom(id,type){
	min_W = 200;
	min_H = 110;
	n_W = 500;
	n_H = 300;
	max_W = 1000;
	max_H = 700;
	
	img = document.getElementById(id);
	curr_W = parseInt(img.width);
	curr_H = parseInt(img.height);
	
	switch (type){
		case '+':
			new_W = curr_W+(curr_W*.1);
			new_H = curr_H+(curr_H*.1);
			break;
		case '-':
			new_W = curr_W-(curr_W*.1);
			new_H = curr_H-(curr_H*.1);
			break;
		case '0':
			new_W = n_W;
			new_H = n_H;
			break;
	}
	
	if((new_W<min_W || new_H<min_H) || (new_W>max_W || new_H>max_H)){
	} else {
		img.style.width = new_W;
		img.style.height = new_H;
	}

}

