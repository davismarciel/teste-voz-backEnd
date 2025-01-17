FROM postgres:17-alpine

ENV POSTGRES_USER=postgres
ENV POSTGRES_PASSWORD=postgres
ENV POSTGRES_DB=voz-db

EXPOSE 5432

CMD ["postgres"]