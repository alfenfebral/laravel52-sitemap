<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($datas as $data)
  <url>
     <loc>{{ $data->url }}</loc>
     <priority>{{ $data->priority }}</priority>
     <lastmod>{{ $data->created_at }}</lastmod>
  </url>
  @endforeach
</urlset>