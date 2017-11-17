FROM nshou/elasticsearch-kibana
COPY elasticsearch.yml /home/elasticsearch/elasticsearch/config/
COPY kibana-index.tar.bz2 /data/
WORKDIR /home/elasticsearch/elasticsearch/data
RUN tar -xvzf kibana-index.tar.bz2 
COPY newmonk_error-elasticsearch-mapping.json /home/elasticsearch
RUN sh //home/elasticsearch/newmonk_error-elasticsearch-mapping.json