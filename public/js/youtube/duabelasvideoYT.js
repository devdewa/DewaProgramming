var apiKey='AIzaSyB9o_r21UfuByPHq399kWx2MEf9I65g4bA';
var channelId='UC6ijSNRVfUNLyxyZNLcTFbA';

$(document).ready(function(){

	$.get(
		"https://www.googleapis.com/youtube/v3/channels", {
			part:'contentDetails',
			id:channelId,
			key:apiKey },
			function(data) {
				$.each(data.items, function(i,item){
					pid=item.contentDetails.relatedPlaylists.uploads;
					fetchVideo(pid);
				});
			}
	);
	function fetchVideo(pid) {
		$.get(
			"https://www.googleapis.com/youtube/v3/playlistItems", {
				part:'snippet',
				maxResults:12,
				playlistId:pid,
				key:'AIzaSyB9o_r21UfuByPHq399kWx2MEf9I65g4bA' },
				function(data) {
					$.each(data.items, function(i,item){
						var vid_title=item.snippet.title;
						var vid_thumb=item.snippet.thumbnails.medium.url;
						var vid_id=item.snippet.resourceId.videoId;
						var vid_container=$('#videoss');
						var videoEle='<iframe class="duabelasvideo vidEle" src="https://www.youtube.com/embed/'+vid_id+'">'+
								        '<a href="">'+
								          '<img class="v-img" src="'+vid_thumb+'"/>'+
								          '<i class="play-btn fa fa-play"></i>'+
								          '<div class="v-title">'+vid_title+'</div>'+
								        //'</a>'+
								      ''
						vid_container.append(videoEle);
					});
				}
		);
	}

 	
});
