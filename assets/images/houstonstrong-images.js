function imgRandom(imgStr) {
  var imgArray = [
  'FelipeGalvan-350w19th-st.jpg',
  'HoustonSkyline_Dusk-MinuteMaid-Park.jpg',
  'Houston-Texas.jpg',
  'houston-downtown-aquarium-night.jpg',
  'houston-dowtown-buildings-bw.jpg',
  'houston-galleria-night.jpg',
  'rockets-yao-ming.jpg',
  'we-love-houston.jpg',
  'houston-skyline-001a.jpg',
  'houston-bg.jpg',
  '0010-Houston_night-luxury-apartments.jpg',
  'mfah.jpg',
  'Houston13-matt-nielsen-md.jpg',
  'Houston5-matt-nielsen-md.jpg',
  'wallpaper.wiki-White-And-Black-Houston-Skyline-Wallpaper-PIC-WPD002282.jpg',
  'wes3799ex.165923_tb-1.jpg'
	];

  var rand = imgArray[Math.floor(Math.random() * imgArray.length)];
	var basePath="http://dreampod-cdn-dx3qfdq.stackpathdns.com/images/houstonstrong/";
  var image = basePath+rand;
	imgStr = image;
  return imgStr;
}