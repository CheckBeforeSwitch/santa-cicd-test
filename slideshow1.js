// ページ内のスライドショー一覧
var theSlideshows = [];

// スライドショー1つの初期化
function Slideshow1(element, index) {
	this.base = element;
	this.index = index;
	this.interval = parseInt(element.dataset.interval);
	if (! this.interval) {
		this.interval = 5000;
	}
	this.transition = parseInt(element.dataset.transition);
	if (! this.transition) {
		this.transition = 1000;
	}
	// 逆引き用インデックスを付与
	element.dataset.index = "" + index;
	
	// スライドショー内のすべてのスライドを取得
	this.o = [];
	const ul = this.base.getElementsByClassName("slideshow1_body")[0];
	const list = ul.getElementsByTagName("li");
	for (let i=0; i<list.length; i++) {
		let e = list[i];
		if (!('scale' in e.dataset)) {
			e.dataset.scale = "1.0";
		}
		e.style.opacity = "0";
		this.o.push(e);
	}
	this.showIndex = list.length - 1;
	this.backIndex = this.showIndex;
	this.transition_value = "transform " + (this.interval + this.transition) + "ms linear, " +
		"opacity " + this.transition + "ms linear";
	
	// スライドショーを更新
	this.showSlide = function(ss) {
		const shidden = ss.o[ss.backIndex].style;
		ss.backIndex = ss.showIndex;
		ss.showIndex ++;
		ss.showIndex %= ss.o.length;
		const sback = ss.o[ss.backIndex].style;
		const sfront = ss.o[ss.showIndex].style;
		const scale = ss.o[ss.showIndex].dataset.scale;
		sfront.zIndex = "1";
		sfront.transform = "scale(" + scale + ")";
		sfront.transition = ss.transition_value;
		sfront.opacity = "1";
		sback.zIndex = "0";
		shidden.opacity = "0";
		shidden.transition = "";
		shidden.transform = "";
		shidden.transition = "";
	}
	this.showSlide(this);
	setInterval(this.showSlide, this.interval, this);
}

// スライドショーの初期化
function initSlideshows(event) {
	// すべてのスライドショーを取得して起動
	const se = document.getElementsByClassName("slideshow1");
	for (let i=0; i<se.length; i++) {
		let slideshow1 = new Slideshow1(se[i], i);
		theSlideshows.push(slideshow1);
	}
}

window.addEventListener("load", initSlideshows);
