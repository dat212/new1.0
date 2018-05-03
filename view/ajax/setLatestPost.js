function setLatestPost() {
	console.log("wtf");
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "../controller/getLatestPost.php", true);
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		
			var latest_post = JSON.parse(this.response);
			console.log(latest_post);
			root = document.getElementsByClassName("latest_post_container")[0];
			ul = root.children[1];
			console.log(ul);
				// console.log(root);
			// Code to set latest view
			// for(var i = 0; i<latest_post.length; i++){
				
			// // document.getElementsByTagName('img')[i].setAttribute('src','latest_post[i].url_thumb');
			// // document.getElementsByTagName('a')[2*i].setAttribute('href','latest_post[i].slug');
			// }
			for (var i = 0; i < 4; i++) {
					li = ul.children[i];
					a1 = li.children[0].children[0];
					// set link and image
					a1.href =  latest_post[i]['slug'];
					img = a1.children[0];
					img.src = "images/" + latest_post[i]['url_thumb'];

					// set link and title
					a2 = li.children[0].children[1].children[0];
					a2.href = latest_post[i]['slug'];
					a2.text = latest_post[i]['title'];


				}
	
		}
	}
	
	xmlhttp.send();
}