$(function(){
	var $regularlyItems=$(".regularly-item-list li");
	$regularlyItems.each(function(){
		var _$this=$(this);
		_$this.children(".flip-box").eq(0).addClass("out").removeClass("in");
	    setTimeout(function() {
	    	_$this.find(".flip-box").show().eq(1).addClass("in").removeClass("out");
	    	_$this.children(".flip-box").eq(0).hide();
	    }, 225);
	});
	$regularlyItems.hover(function(){
		var _$this=$(this);
	    _$this.children(".flip-box").eq(1).addClass("out").removeClass("in");
	    setTimeout(function() {
	    	_$this.find(".flip-box").show().eq(0).addClass("in").removeClass("out");
	    	_$this.children(".flip-box").eq(1).hide();
	    }, 225);
	},function(){
		var _$this=$(this);
		_$this.children(".flip-box").eq(0).addClass("out").removeClass("in");
	    setTimeout(function() {
	    	_$this.find(".flip-box").show().eq(1).addClass("in").removeClass("out");
	    	_$this.children(".flip-box").eq(0).hide();
	    }, 225);
	});
});
/*
本代码由js代码收集并编辑整理;
尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
*/