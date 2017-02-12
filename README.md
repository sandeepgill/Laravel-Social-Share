# Laravel SocialShare

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require sandeepgill/laravel-social-share
```

And then include the service provider within `app/config/app.php`.

``` php
SandeepGill\SocialShare\SocialShareServiceProvider::class
```

And, for convenience, add a facade alias to this same file at the bottom:

``` php
'Share' => SandeepGill\SocialShare\Facades\SocialShare
```

## Usage

``` php
Share::delicious(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::digg(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::evernote(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::facebook(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::gmail(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::googleplus(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::linkedin(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::pinterest(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::reddit(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::scoopit(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::springpad(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::tumblr(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::twitter(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::viadeo(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::vkcom(route('post.show', $post->id), $post->title, $post->thumbnail);
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
