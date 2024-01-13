const twitterPosts = [
  {
    image: './images/profile-image-1.jpg',
    handle: 'Michael Kruger',
    caption: 'Just had a great day at the beach! 🌞🏖️ #BeachDay',
    post: 'Spent the day relaxing in the sun and enjoying the ocean breeze. #Sunshine',
    postImage: './images/post-image-1.jpg',
  },
  {
    image: './images/profile-image-2.jpg',
    handle: 'Jennifer Davis',
    caption: 'Delicious homemade dinner tonight. 😋🍽️ #Foodie',
    post: 'Cooked up a fantastic meal with friends. Bon appétit! #Cooking',
    postImage: './images/post-image-2.jpg',
  },
  {
    image: './images/profile-image-3.jpg',
    handle: 'Elon Musk',
    caption: 'Exploring the great outdoors. 🌲🌿 #Adventure',
    post: 'Hiking through the forest and discovering hidden treasures. #NatureLover',
  },
  {
    image: './images/profile-image-4.jpg',
    handle: 'Sammy',
    caption: 'Movie night with friends. 🍿🎬 #MovieNight',
    post: 'Watched the latest blockbuster and had a blast! #FilmFan',
    postImage: './images/post-image-4.jpg',
  },
  {
    image: './images/profile-image-5.jpg',
    handle: 'Cristiano Ronaldo',
    caption: 'Lazy Sunday afternoon. 😴☕ #ChillMode',
    post: 'Relaxing at home with a good book and a cup of coffee. #SundayVibes',
  },
  {
    image: './images/profile-image-6.jpg',
    handle: 'X',
    caption: 'Spectacular sunset view. 🌅 #Sunset',
    post: 'Witnessed a breathtaking sunset by the beach. Nature is incredible! #NatureBeauty',
    postImage: './images/post-image-6.jpg',
  },
  {
    image: './images/profile-image-7.png',
    handle: 'Sydney',
    caption: 'Game night with friends. 🎮🕹️ #Gaming',
    post: 'Competing in epic battles and having a blast gaming with pals. #GamerLife',
  },
 {
    image: './images/profile-image-8.jpg',
    handle: 'mrFunny1',
    caption: 'Traveling to new horizons. ✈️🌍 #Travel',
    post: 'Exploring new cultures and trying exotic foods. Adventure awaits! #Wanderlust',
  },
  {
    image: './images/profile-image-9.jpg',
    handle: 'Jeff Williams',
    caption: 'Artistic inspiration strikes. 🎨✏️ #Art',
    post: 'Creating a masterpiece in the studio today. Art is my passion! #ArtistLife',
  },
  {
    image: './images/profile-image-10.jpg',
    handle: 'React Web Dev',
    caption: 'Productive workday. 💼📈 #WorkLife',
    post: 'Achieved my goals and made progress on exciting projects. #CareerSuccess',
    postImage: './images/post-image-10.jpg',
  },
];

const postTab = document.querySelector('main');
twitterPosts.map((post) => {
  const html = `

    <div class="post">
      <div class="post_profile-image">
        <img src="${post.image}" alt="java-logo" />
      </div>

      <div class="post_body">
        <div class="post_header">
          <div class="post_header-text">
            <h3>
            ${post.handle}
              <span class="header-icon-section">
                <span class="material-icons post_badge">verified</span>@java
              </span>
            </h3>
          </div>

          <div class="post_header-discription">
          <p>${post.caption}</p>
            <p>${post.post}</p>
          </div>
        </div>
        <img src="${post.postImage}" alt="java18" />

        <div class="post_footer">
          <span class="material-icons">chat</span>
          <span class="material-icons">repeat</span>
          <span class="material-icons">favorite_border</span>
          <span class="material-icons">file_upload</span>
        </div>
      </div>
    </div>
`;
  postTab.insertAdjacentHTML('beforeend', html);
});

