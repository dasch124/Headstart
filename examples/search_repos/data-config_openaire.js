var data_config = {
    tag: "visualization",
    mode: "search_repos",

    service: "openaire",

    title: "",
    base_unit: "citations",
    use_area_uri: true,
    show_timeline: false,
    show_dropdown: false,
    preview_type: "pdf",
    sort_options: ["readers", "title", "authors", "year"],
    is_force_areas: true,
    language: "eng_pubmed",
    area_force_alpha: 0.015,
    show_list: true,
    content_based: false,
	//debug: true,
	show_context: true,
    create_title_from_context: true,
    scale_types: ['citation_count', 'cited_by_tweeters_count', 'readers.mendeley'],
    scale_explaination: {
        citation_count: 'Scaleum Ipsum Sit Dolor scaled by Citations',
        cited_by_tweeters_count: 'Scaleum Ipsum Sit Dolor scaled by Tweets',
        'readers.mendeley': 'Scaleum Ipsum Sit Dolor scaled by Mendeley Readers'
    }
};
